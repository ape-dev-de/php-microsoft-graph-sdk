<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationAssignmentCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationAssignment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Assignments\EducationAssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Assignments\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Assignments\DeltaRequestBuilder;

/**
 * Request builder for /education/classes/{educationClass-id}/assignments
 */
class AssignmentsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List class assignments
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return EducationAssignmentCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): EducationAssignmentCollectionResponse|null
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
     * Deserialize response to EducationAssignmentCollectionResponse|null
     */
    private function deserializeGet(string $body): EducationAssignmentCollectionResponse|null    {
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
            $items[] = new EducationAssignment($item);
        }
        $collection = new EducationAssignmentCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create educationAssignment
     * @param EducationAssignment $body Request body
     * @return EducationAssignment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(EducationAssignment $body): EducationAssignment|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to EducationAssignment|null
     */
    private function deserializePost(string $body): EducationAssignment|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EducationAssignment($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $educationAssignmentId The item ID
     * @return EducationAssignmentRequestBuilder
     */
    public function byId(string $educationAssignmentId): EducationAssignmentRequestBuilder
    {
        return new EducationAssignmentRequestBuilder($this->client, $this->requestUrl . '/' . $educationAssignmentId);
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
    /**
     * Navigate to delta()
     *
     * @return DeltaRequestBuilder
     */
    public function delta(): DeltaRequestBuilder
    {
        return new DeltaRequestBuilder($this->client, $this->requestUrl . '/delta()');
    }
}
