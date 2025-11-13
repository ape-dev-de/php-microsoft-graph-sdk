<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessReviewInstanceDecisionItemCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessReviewInstanceDecisionItem;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\Decisions\AccessReviewInstanceDecisionItemRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\Decisions\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\Decisions\FilterByCurrentUserRequestBuilder;

/**
 * Request builder for /identityGovernance/accessReviews/definitions/{accessReviewScheduleDefinition-id}/instances/{accessReviewInstance-id}/decisions
 */
class DecisionsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List decisions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return AccessReviewInstanceDecisionItemCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): AccessReviewInstanceDecisionItemCollectionResponse|null
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
     * Deserialize response to AccessReviewInstanceDecisionItemCollectionResponse|null
     */
    private function deserializeGet(string $body): AccessReviewInstanceDecisionItemCollectionResponse|null    {
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
            $items[] = new AccessReviewInstanceDecisionItem($item);
        }
        $collection = new AccessReviewInstanceDecisionItemCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to decisions for identityGovernance
     * @param AccessReviewInstanceDecisionItem $body Request body
     * @return AccessReviewInstanceDecisionItem|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(AccessReviewInstanceDecisionItem $body): AccessReviewInstanceDecisionItem|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to AccessReviewInstanceDecisionItem|null
     */
    private function deserializePost(string $body): AccessReviewInstanceDecisionItem|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AccessReviewInstanceDecisionItem($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $accessReviewInstanceDecisionItemId The item ID
     * @return AccessReviewInstanceDecisionItemRequestBuilder
     */
    public function byId(string $accessReviewInstanceDecisionItemId): AccessReviewInstanceDecisionItemRequestBuilder
    {
        return new AccessReviewInstanceDecisionItemRequestBuilder($this->client, $this->requestUrl . '/' . $accessReviewInstanceDecisionItemId);
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
