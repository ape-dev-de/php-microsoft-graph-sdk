<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\RetentionLabels;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityDispositionReviewStageCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityDispositionReviewStage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\RetentionLabels\DispositionReviewStages\DispositionReviewStageStageNumberRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Labels\RetentionLabels\DispositionReviewStages\CountRequestBuilder;

/**
 * Request builder for /security/labels/retentionLabels/{retentionLabel-id}/dispositionReviewStages
 */
class DispositionReviewStagesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get dispositionReviewStages from security
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return SecurityDispositionReviewStageCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): SecurityDispositionReviewStageCollectionResponse|null
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
     * Deserialize response to SecurityDispositionReviewStageCollectionResponse|null
     */
    private function deserializeGet(string $body): SecurityDispositionReviewStageCollectionResponse|null    {
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
            $items[] = new SecurityDispositionReviewStage($item);
        }
        $collection = new SecurityDispositionReviewStageCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to dispositionReviewStages for security
     * @param SecurityDispositionReviewStage $body Request body
     * @return SecurityDispositionReviewStage|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SecurityDispositionReviewStage $body): SecurityDispositionReviewStage|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SecurityDispositionReviewStage|null
     */
    private function deserializePost(string $body): SecurityDispositionReviewStage|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SecurityDispositionReviewStage($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $dispositionReviewStageStageNumberId The item ID
     * @return DispositionReviewStageStageNumberRequestBuilder
     */
    public function byId(string $dispositionReviewStageStageNumberId): DispositionReviewStageStageNumberRequestBuilder
    {
        return new DispositionReviewStageStageNumberRequestBuilder($this->client, $this->requestUrl . '/' . $dispositionReviewStageStageNumberId);
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
