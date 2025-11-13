<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProtection\RiskyServicePrincipals;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\RiskyServicePrincipal;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProtection\RiskyServicePrincipals\HistoryRequestBuilder;

/**
 * Request builder for /identityProtection/riskyServicePrincipals/{riskyServicePrincipal-id}
 */
class RiskyServicePrincipalRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get riskyServicePrincipal
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return RiskyServicePrincipal|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): RiskyServicePrincipal|null
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
     * Deserialize response to RiskyServicePrincipal|null
     */
    private function deserializeGet(string $body): RiskyServicePrincipal|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new RiskyServicePrincipal($data);
    }
    /**
     * Update the navigation property riskyServicePrincipals in identityProtection
     * @param RiskyServicePrincipal $body Request body
     * @return RiskyServicePrincipal|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(RiskyServicePrincipal $body): RiskyServicePrincipal|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to RiskyServicePrincipal|null
     */
    private function deserializePatch(string $body): RiskyServicePrincipal|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new RiskyServicePrincipal($data);
    }
    /**
     * Delete navigation property riskyServicePrincipals for identityProtection
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
    /**
     * Navigate to history
     *
     * @return HistoryRequestBuilder
     */
    public function history(): HistoryRequestBuilder
    {
        return new HistoryRequestBuilder($this->client, $this->requestUrl . '/history');
    }
}
