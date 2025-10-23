<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ApplePushNotificationCertificate;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DownloadApplePushNotificationCertificateSigningRequestRequestBuilder;

/**
 * Request builder for applePushNotificationCertificate
 */
class ApplePushNotificationCertificateRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get applePushNotificationCertificate
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ApplePushNotificationCertificate
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ApplePushNotificationCertificate
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to ApplePushNotificationCertificate
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
        return new ApplePushNotificationCertificate($data);
    }
    /**
     * Update applePushNotificationCertificate
     * @param ApplePushNotificationCertificate $body Request body
     * @return ApplePushNotificationCertificate
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ApplePushNotificationCertificate $body): ApplePushNotificationCertificate
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ApplePushNotificationCertificate
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
        return new ApplePushNotificationCertificate($data);
    }
    /**
     * Delete navigation property applePushNotificationCertificate for deviceManagement
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
     * Navigate to downloadApplePushNotificationCertificateSigningRequest()
     *
     * @return DownloadApplePushNotificationCertificateSigningRequestRequestBuilder
     */
    public function downloadApplePushNotificationCertificateSigningRequest(): DownloadApplePushNotificationCertificateSigningRequestRequestBuilder
    {
        return new DownloadApplePushNotificationCertificateSigningRequestRequestBuilder($this->client, $this->requestUrl . '/downloadApplePushNotificationCertificateSigningRequest()');
    }
}
