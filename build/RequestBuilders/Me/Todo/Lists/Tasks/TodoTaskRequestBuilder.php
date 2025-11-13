<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Todo\Lists\Tasks;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TodoTask;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Todo\Lists\Tasks\AttachmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Todo\Lists\Tasks\AttachmentSessionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Todo\Lists\Tasks\ChecklistItemsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Todo\Lists\Tasks\ExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Todo\Lists\Tasks\LinkedResourcesRequestBuilder;

/**
 * Request builder for /me/todo/lists/{todoTaskList-id}/tasks/{todoTask-id}
 */
class TodoTaskRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get todoTask
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TodoTask|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TodoTask|null
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
     * Deserialize response to TodoTask|null
     */
    private function deserializeGet(string $body): TodoTask|null    {
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
     * @return TodoTask|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TodoTask $body): TodoTask|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TodoTask|null
     */
    private function deserializePatch(string $body): TodoTask|null    {
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
