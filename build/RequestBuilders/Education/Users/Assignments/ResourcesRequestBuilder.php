<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users\Assignments;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationAssignmentResourceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationAssignmentResource;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users\Assignments\Resources\EducationAssignmentResourceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users\Assignments\Resources\CountRequestBuilder;

/**
 * Request builder for /education/users/{educationUser-id}/assignments/{educationAssignment-id}/resources
 */
class ResourcesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get resources from education
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return EducationAssignmentResourceCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): EducationAssignmentResourceCollectionResponse|null
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
     * Deserialize response to EducationAssignmentResourceCollectionResponse|null
     */
    private function deserializeGet(string $body): EducationAssignmentResourceCollectionResponse|null    {
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
            $items[] = new EducationAssignmentResource($item);
        }
        $collection = new EducationAssignmentResourceCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to resources for education
     * @param EducationAssignmentResource $body Request body
     * @return EducationAssignmentResource|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(EducationAssignmentResource $body): EducationAssignmentResource|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to EducationAssignmentResource|null
     */
    private function deserializePost(string $body): EducationAssignmentResource|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EducationAssignmentResource($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $educationAssignmentResourceId The item ID
     * @return EducationAssignmentResourceRequestBuilder
     */
    public function byId(string $educationAssignmentResourceId): EducationAssignmentResourceRequestBuilder
    {
        return new EducationAssignmentResourceRequestBuilder($this->client, $this->requestUrl . '/' . $educationAssignmentResourceId);
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
