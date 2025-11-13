<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\TermsAndConditions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TermsAndConditionsAssignmentCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\TermsAndConditionsAssignment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\TermsAndConditions\Assignments\TermsAndConditionsAssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\TermsAndConditions\Assignments\CountRequestBuilder;

/**
 * Request builder for /deviceManagement/termsAndConditions/{termsAndConditions-id}/assignments
 */
class AssignmentsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List termsAndConditionsAssignments
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return TermsAndConditionsAssignmentCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): TermsAndConditionsAssignmentCollectionResponse|null
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
     * Deserialize response to TermsAndConditionsAssignmentCollectionResponse|null
     */
    private function deserializeGet(string $body): TermsAndConditionsAssignmentCollectionResponse|null    {
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
            $items[] = new TermsAndConditionsAssignment($item);
        }
        $collection = new TermsAndConditionsAssignmentCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create termsAndConditionsAssignment
     * @param TermsAndConditionsAssignment $body Request body
     * @return TermsAndConditionsAssignment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(TermsAndConditionsAssignment $body): TermsAndConditionsAssignment|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to TermsAndConditionsAssignment|null
     */
    private function deserializePost(string $body): TermsAndConditionsAssignment|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new TermsAndConditionsAssignment($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $termsAndConditionsAssignmentId The item ID
     * @return TermsAndConditionsAssignmentRequestBuilder
     */
    public function byId(string $termsAndConditionsAssignmentId): TermsAndConditionsAssignmentRequestBuilder
    {
        return new TermsAndConditionsAssignmentRequestBuilder($this->client, $this->requestUrl . '/' . $termsAndConditionsAssignmentId);
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
