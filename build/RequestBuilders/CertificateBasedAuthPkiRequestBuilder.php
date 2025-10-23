<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CertificateBasedAuthPki;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CertificateAuthoritiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UploadRequestBuilder;

/**
 * Request builder for {certificateBasedAuthPki-id}
 */
class CertificateBasedAuthPkiRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get certificateBasedAuthPki
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return CertificateBasedAuthPki
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): CertificateBasedAuthPki
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to CertificateBasedAuthPki
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
        return new CertificateBasedAuthPki($data);
    }
    /**
     * Update certificateBasedAuthPki
     * @param CertificateBasedAuthPki $body Request body
     * @return CertificateBasedAuthPki
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(CertificateBasedAuthPki $body): CertificateBasedAuthPki
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to CertificateBasedAuthPki
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new CertificateBasedAuthPki($data);
    }
    /**
     * Delete certificateBasedAuthPki
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null) {
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
    private function deserializeDelete(string $body): mixed
    {
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
     * Navigate to certificateAuthorities
     *
     * @return CertificateAuthoritiesRequestBuilder
     */
    public function certificateAuthorities(): CertificateAuthoritiesRequestBuilder
    {
        return new CertificateAuthoritiesRequestBuilder($this->client, $this->requestUrl . '/certificateAuthorities');
    }
    /**
     * Navigate to upload
     *
     * @return UploadRequestBuilder
     */
    public function upload(): UploadRequestBuilder
    {
        return new UploadRequestBuilder($this->client, $this->requestUrl . '/upload');
    }
}
