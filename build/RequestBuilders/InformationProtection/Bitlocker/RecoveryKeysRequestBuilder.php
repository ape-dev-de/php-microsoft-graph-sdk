<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InformationProtection\Bitlocker;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\BitlockerRecoveryKeyCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\BitlockerRecoveryKey;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InformationProtection\Bitlocker\RecoveryKeys\BitlockerRecoveryKeyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InformationProtection\Bitlocker\RecoveryKeys\CountRequestBuilder;

/**
 * Request builder for /informationProtection/bitlocker/recoveryKeys
 */
class RecoveryKeysRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List recoveryKeys
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return BitlockerRecoveryKeyCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): BitlockerRecoveryKeyCollectionResponse|null
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
     * Deserialize response to BitlockerRecoveryKeyCollectionResponse|null
     */
    private function deserializeGet(string $body): BitlockerRecoveryKeyCollectionResponse|null    {
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
            $items[] = new BitlockerRecoveryKey($item);
        }
        $collection = new BitlockerRecoveryKeyCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $bitlockerRecoveryKeyId The item ID
     * @return BitlockerRecoveryKeyRequestBuilder
     */
    public function byId(string $bitlockerRecoveryKeyId): BitlockerRecoveryKeyRequestBuilder
    {
        return new BitlockerRecoveryKeyRequestBuilder($this->client, $this->requestUrl . '/' . $bitlockerRecoveryKeyId);
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
