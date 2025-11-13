<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\SslCertificates;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecuritySslCertificate;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\SslCertificates\RelatedHostsRequestBuilder;

/**
 * Request builder for /security/threatIntelligence/sslCertificates/{sslCertificate-id}
 */
class SslCertificateRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get sslCertificate
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecuritySslCertificate|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecuritySslCertificate|null
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
     * Deserialize response to SecuritySslCertificate|null
     */
    private function deserializeGet(string $body): SecuritySslCertificate|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SecuritySslCertificate($data);
    }
    /**
     * Update the navigation property sslCertificates in security
     * @param SecuritySslCertificate $body Request body
     * @return SecuritySslCertificate|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecuritySslCertificate $body): SecuritySslCertificate|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecuritySslCertificate|null
     */
    private function deserializePatch(string $body): SecuritySslCertificate|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SecuritySslCertificate($data);
    }
    /**
     * Delete navigation property sslCertificates for security
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
     * Navigate to relatedHosts
     *
     * @return RelatedHostsRequestBuilder
     */
    public function relatedHosts(): RelatedHostsRequestBuilder
    {
        return new RelatedHostsRequestBuilder($this->client, $this->requestUrl . '/relatedHosts');
    }
}
