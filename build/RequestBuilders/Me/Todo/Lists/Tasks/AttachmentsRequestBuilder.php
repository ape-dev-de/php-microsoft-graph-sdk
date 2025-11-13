<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Todo\Lists\Tasks;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AttachmentBaseCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\AttachmentBase;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Todo\Lists\Tasks\Attachments\AttachmentBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Todo\Lists\Tasks\Attachments\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Todo\Lists\Tasks\Attachments\CreateUploadSessionRequestBuilder;

/**
 * Request builder for /me/todo/lists/{todoTaskList-id}/tasks/{todoTask-id}/attachments
 */
class AttachmentsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List taskFileAttachments
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return AttachmentBaseCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): AttachmentBaseCollectionResponse|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to AttachmentBaseCollectionResponse|null
     */
    private function deserializeGet(string $body): AttachmentBaseCollectionResponse|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new AttachmentBase($item);
        }
        $collection = new AttachmentBaseCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create taskFileAttachment
     * @param AttachmentBase $body Request body
     * @return AttachmentBase|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(AttachmentBase $body): AttachmentBase|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to AttachmentBase|null
     */
    private function deserializePost(string $body): AttachmentBase|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AttachmentBase($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $attachmentBaseId The item ID
     * @return AttachmentBaseRequestBuilder
     */
    public function byId(string $attachmentBaseId): AttachmentBaseRequestBuilder
    {
        return new AttachmentBaseRequestBuilder($this->client, $this->requestUrl . '/' . $attachmentBaseId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
    /**
     * Navigate to createUploadSession
     *
     * @return CreateUploadSessionRequestBuilder
     */
    public function createUploadSession(): CreateUploadSessionRequestBuilder
    {
        return new CreateUploadSessionRequestBuilder($this->client, $this->requestUrl . '/createUploadSession');
    }
}
