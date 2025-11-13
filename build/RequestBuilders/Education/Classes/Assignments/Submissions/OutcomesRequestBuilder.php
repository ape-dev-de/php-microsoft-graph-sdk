<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Assignments\Submissions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationOutcomeCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationOutcome;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Assignments\Submissions\Outcomes\EducationOutcomeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Assignments\Submissions\Outcomes\CountRequestBuilder;

/**
 * Request builder for /education/classes/{educationClass-id}/assignments/{educationAssignment-id}/submissions/{educationSubmission-id}/outcomes
 */
class OutcomesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List outcomes
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return EducationOutcomeCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): EducationOutcomeCollectionResponse|null
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
     * Deserialize response to EducationOutcomeCollectionResponse|null
     */
    private function deserializeGet(string $body): EducationOutcomeCollectionResponse|null    {
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
            $items[] = new EducationOutcome($item);
        }
        $collection = new EducationOutcomeCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create educationFeedbackResourceOutcome
     * @param EducationOutcome $body Request body
     * @return EducationOutcome|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(EducationOutcome $body): EducationOutcome|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to EducationOutcome|null
     */
    private function deserializePost(string $body): EducationOutcome|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EducationOutcome($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $educationOutcomeId The item ID
     * @return EducationOutcomeRequestBuilder
     */
    public function byId(string $educationOutcomeId): EducationOutcomeRequestBuilder
    {
        return new EducationOutcomeRequestBuilder($this->client, $this->requestUrl . '/' . $educationOutcomeId);
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
