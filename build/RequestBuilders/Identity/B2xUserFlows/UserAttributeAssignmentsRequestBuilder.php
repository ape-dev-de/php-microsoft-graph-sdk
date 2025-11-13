<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityUserFlowAttributeAssignmentCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityUserFlowAttributeAssignment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\UserAttributeAssignments\IdentityUserFlowAttributeAssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\UserAttributeAssignments\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\UserAttributeAssignments\GetOrderRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\UserAttributeAssignments\SetOrderRequestBuilder;

/**
 * Request builder for /identity/b2xUserFlows/{b2xIdentityUserFlow-id}/userAttributeAssignments
 */
class UserAttributeAssignmentsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List userAttributeAssignments
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return IdentityUserFlowAttributeAssignmentCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): IdentityUserFlowAttributeAssignmentCollectionResponse|null
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
     * Deserialize response to IdentityUserFlowAttributeAssignmentCollectionResponse|null
     */
    private function deserializeGet(string $body): IdentityUserFlowAttributeAssignmentCollectionResponse|null    {
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
            $items[] = new IdentityUserFlowAttributeAssignment($item);
        }
        $collection = new IdentityUserFlowAttributeAssignmentCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create userAttributeAssignments
     * @param IdentityUserFlowAttributeAssignment $body Request body
     * @return IdentityUserFlowAttributeAssignment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(IdentityUserFlowAttributeAssignment $body): IdentityUserFlowAttributeAssignment|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to IdentityUserFlowAttributeAssignment|null
     */
    private function deserializePost(string $body): IdentityUserFlowAttributeAssignment|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IdentityUserFlowAttributeAssignment($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $identityUserFlowAttributeAssignmentId The item ID
     * @return IdentityUserFlowAttributeAssignmentRequestBuilder
     */
    public function byId(string $identityUserFlowAttributeAssignmentId): IdentityUserFlowAttributeAssignmentRequestBuilder
    {
        return new IdentityUserFlowAttributeAssignmentRequestBuilder($this->client, $this->requestUrl . '/' . $identityUserFlowAttributeAssignmentId);
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
     * Navigate to getOrder()
     *
     * @return GetOrderRequestBuilder
     */
    public function getOrder(): GetOrderRequestBuilder
    {
        return new GetOrderRequestBuilder($this->client, $this->requestUrl . '/getOrder()');
    }
    /**
     * Navigate to setOrder
     *
     * @return SetOrderRequestBuilder
     */
    public function setOrder(): SetOrderRequestBuilder
    {
        return new SetOrderRequestBuilder($this->client, $this->requestUrl . '/setOrder');
    }
}
