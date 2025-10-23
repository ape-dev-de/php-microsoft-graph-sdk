<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceUpdateMessage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AttachmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AttachmentsArchiveRequestBuilder;

/**
 * Request builder for {serviceUpdateMessage-id}
 */
class ServiceUpdateMessageRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get serviceUpdateMessage
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ServiceUpdateMessage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ServiceUpdateMessage
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
     * Deserialize response to ServiceUpdateMessage
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
        return new ServiceUpdateMessage($data);
    }
    /**
     * Update the navigation property messages in admin
     * @param ServiceUpdateMessage $body Request body
     * @return ServiceUpdateMessage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ServiceUpdateMessage $body): ServiceUpdateMessage
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ServiceUpdateMessage
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
        return new ServiceUpdateMessage($data);
    }
    /**
     * Delete navigation property messages for admin
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
     * Navigate to attachments
     *
     * @return AttachmentsRequestBuilder
     */
    public function attachments(): AttachmentsRequestBuilder
    {
        return new AttachmentsRequestBuilder($this->client, $this->requestUrl . '/attachments');
    }
    /**
     * Navigate to attachmentsArchive
     *
     * @return AttachmentsArchiveRequestBuilder
     */
    public function attachmentsArchive(): AttachmentsArchiveRequestBuilder
    {
        return new AttachmentsArchiveRequestBuilder($this->client, $this->requestUrl . '/attachmentsArchive');
    }
}
