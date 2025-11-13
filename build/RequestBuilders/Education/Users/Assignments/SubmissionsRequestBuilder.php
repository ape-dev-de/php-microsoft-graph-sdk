<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users\Assignments;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationSubmissionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationSubmission;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users\Assignments\Submissions\EducationSubmissionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users\Assignments\Submissions\CountRequestBuilder;

/**
 * Request builder for /education/users/{educationUser-id}/assignments/{educationAssignment-id}/submissions
 */
class SubmissionsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get submissions from education
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return EducationSubmissionCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): EducationSubmissionCollectionResponse|null
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
     * Deserialize response to EducationSubmissionCollectionResponse|null
     */
    private function deserializeGet(string $body): EducationSubmissionCollectionResponse|null    {
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
            $items[] = new EducationSubmission($item);
        }
        $collection = new EducationSubmissionCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to submissions for education
     * @param EducationSubmission $body Request body
     * @return EducationSubmission|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(EducationSubmission $body): EducationSubmission|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to EducationSubmission|null
     */
    private function deserializePost(string $body): EducationSubmission|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EducationSubmission($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $educationSubmissionId The item ID
     * @return EducationSubmissionRequestBuilder
     */
    public function byId(string $educationSubmissionId): EducationSubmissionRequestBuilder
    {
        return new EducationSubmissionRequestBuilder($this->client, $this->requestUrl . '/' . $educationSubmissionId);
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
