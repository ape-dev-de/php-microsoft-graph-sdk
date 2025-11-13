<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationSchoolCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationSchool;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Schools\EducationSchoolRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Schools\CountRequestBuilder;

/**
 * Request builder for /education/classes/{educationClass-id}/schools
 */
class SchoolsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List schools
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return EducationSchoolCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): EducationSchoolCollectionResponse|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to EducationSchoolCollectionResponse|null
     */
    private function deserializeGet(string $body): EducationSchoolCollectionResponse|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new EducationSchool($item);
        }
        $collection = new EducationSchoolCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $educationSchoolId The item ID
     * @return EducationSchoolRequestBuilder
     */
    public function byId(string $educationSchoolId): EducationSchoolRequestBuilder
    {
        return new EducationSchoolRequestBuilder($this->client, $this->requestUrl . '/' . $educationSchoolId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
}
