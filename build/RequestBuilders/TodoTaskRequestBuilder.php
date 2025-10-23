<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TodoTask;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AttachmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AttachmentSessionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ChecklistItemsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\LinkedResourcesRequestBuilder;

/**
 * Request builder for {todoTask-id}
 */
class TodoTaskRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get todoTask
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TodoTask
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TodoTask
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
     * Deserialize response to TodoTask
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
        return new TodoTask($data);
    }
    /**
     * Update todoTask
     * @param TodoTask $body Request body
     * @return TodoTask
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TodoTask $body): TodoTask
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TodoTask
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
        return new TodoTask($data);
    }
    /**
     * Delete todoTask
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
     * Navigate to attachmentSessions
     *
     * @return AttachmentSessionsRequestBuilder
     */
    public function attachmentSessions(): AttachmentSessionsRequestBuilder
    {
        return new AttachmentSessionsRequestBuilder($this->client, $this->requestUrl . '/attachmentSessions');
    }
    /**
     * Navigate to checklistItems
     *
     * @return ChecklistItemsRequestBuilder
     */
    public function checklistItems(): ChecklistItemsRequestBuilder
    {
        return new ChecklistItemsRequestBuilder($this->client, $this->requestUrl . '/checklistItems');
    }
    /**
     * Navigate to extensions
     *
     * @return ExtensionsRequestBuilder
     */
    public function extensions(): ExtensionsRequestBuilder
    {
        return new ExtensionsRequestBuilder($this->client, $this->requestUrl . '/extensions');
    }
    /**
     * Navigate to linkedResources
     *
     * @return LinkedResourcesRequestBuilder
     */
    public function linkedResources(): LinkedResourcesRequestBuilder
    {
        return new LinkedResourcesRequestBuilder($this->client, $this->requestUrl . '/linkedResources');
    }
}
