<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProtection\RiskyServicePrincipals\History;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\RiskyServicePrincipalHistoryItem;

/**
 * Request builder for /identityProtection/riskyServicePrincipals/{riskyServicePrincipal-id}/history/{riskyServicePrincipalHistoryItem-id}
 */
class RiskyServicePrincipalHistoryItemRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get history from identityProtection
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return RiskyServicePrincipalHistoryItem|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): RiskyServicePrincipalHistoryItem|null
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
     * Deserialize response to RiskyServicePrincipalHistoryItem|null
     */
    private function deserializeGet(string $body): RiskyServicePrincipalHistoryItem|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new RiskyServicePrincipalHistoryItem($data);
    }
    /**
     * Update the navigation property history in identityProtection
     * @param RiskyServicePrincipalHistoryItem $body Request body
     * @return RiskyServicePrincipalHistoryItem|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(RiskyServicePrincipalHistoryItem $body): RiskyServicePrincipalHistoryItem|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to RiskyServicePrincipalHistoryItem|null
     */
    private function deserializePatch(string $body): RiskyServicePrincipalHistoryItem|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new RiskyServicePrincipalHistoryItem($data);
    }
    /**
     * Delete navigation property history for identityProtection
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return $data;
    }
}
