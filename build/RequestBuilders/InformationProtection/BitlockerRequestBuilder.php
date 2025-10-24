<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InformationProtection;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Bitlocker;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InformationProtection\Bitlocker\RecoveryKeysRequestBuilder;

/**
 * Request builder for /informationProtection/bitlocker
 */
class BitlockerRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get bitlocker from informationProtection
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Bitlocker
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Bitlocker
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Bitlocker
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Bitlocker($data);
    }
    /**
     * Navigate to recoveryKeys
     *
     * @return RecoveryKeysRequestBuilder
     */
    public function recoveryKeys(): RecoveryKeysRequestBuilder
    {
        return new RecoveryKeysRequestBuilder($this->client, $this->requestUrl . '/recoveryKeys');
    }
}
