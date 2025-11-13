<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\HostSslCertificates;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityHostSslCertificate;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\HostSslCertificates\HostRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\HostSslCertificates\SslCertificateRequestBuilder;

/**
 * Request builder for /security/threatIntelligence/hostSslCertificates/{hostSslCertificate-id}
 */
class HostSslCertificateRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get hostSslCertificate
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityHostSslCertificate|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityHostSslCertificate|null
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
     * Deserialize response to SecurityHostSslCertificate|null
     */
    private function deserializeGet(string $body): SecurityHostSslCertificate|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SecurityHostSslCertificate($data);
    }
    /**
     * Update the navigation property hostSslCertificates in security
     * @param SecurityHostSslCertificate $body Request body
     * @return SecurityHostSslCertificate|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityHostSslCertificate $body): SecurityHostSslCertificate|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityHostSslCertificate|null
     */
    private function deserializePatch(string $body): SecurityHostSslCertificate|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SecurityHostSslCertificate($data);
    }
    /**
     * Delete navigation property hostSslCertificates for security
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
     * Navigate to host
     *
     * @return HostRequestBuilder
     */
    public function host(): HostRequestBuilder
    {
        return new HostRequestBuilder($this->client, $this->requestUrl . '/host');
    }
    /**
     * Navigate to sslCertificate
     *
     * @return SslCertificateRequestBuilder
     */
    public function sslCertificate(): SslCertificateRequestBuilder
    {
        return new SslCertificateRequestBuilder($this->client, $this->requestUrl . '/sslCertificate');
    }
}
