<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Message;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages\ValueRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages\AttachmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages\ExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages\CopyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages\CreateForwardRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages\CreateReplyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages\CreateReplyAllRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages\ForwardRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages\MoveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages\PermanentDeleteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages\ReplyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages\ReplyAllRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders\Messages\SendRequestBuilder;

/**
 * Request builder for /me/mailFolders/{mailFolder-id}/childFolders/{mailFolder-id1}/messages/{message-id}
 */
class MessageRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get messages from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Message
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Message
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
     * Deserialize response to Message
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
        return new Message($data);
    }
    /**
     * Update the navigation property messages in me
     * @param Message $body Request body
     * @return Message
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Message $body): Message
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Message
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
        return new Message($data);
    }
    /**
     * Delete navigation property messages for me
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
     * Navigate to $value
     *
     * @return ValueRequestBuilder
     */
    public function value(): ValueRequestBuilder
    {
        return new ValueRequestBuilder($this->client, $this->requestUrl . '/$value');
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
     * Navigate to extensions
     *
     * @return ExtensionsRequestBuilder
     */
    public function extensions(): ExtensionsRequestBuilder
    {
        return new ExtensionsRequestBuilder($this->client, $this->requestUrl . '/extensions');
    }
    /**
     * Navigate to copy
     *
     * @return CopyRequestBuilder
     */
    public function copy(): CopyRequestBuilder
    {
        return new CopyRequestBuilder($this->client, $this->requestUrl . '/copy');
    }
    /**
     * Navigate to createForward
     *
     * @return CreateForwardRequestBuilder
     */
    public function createForward(): CreateForwardRequestBuilder
    {
        return new CreateForwardRequestBuilder($this->client, $this->requestUrl . '/createForward');
    }
    /**
     * Navigate to createReply
     *
     * @return CreateReplyRequestBuilder
     */
    public function createReply(): CreateReplyRequestBuilder
    {
        return new CreateReplyRequestBuilder($this->client, $this->requestUrl . '/createReply');
    }
    /**
     * Navigate to createReplyAll
     *
     * @return CreateReplyAllRequestBuilder
     */
    public function createReplyAll(): CreateReplyAllRequestBuilder
    {
        return new CreateReplyAllRequestBuilder($this->client, $this->requestUrl . '/createReplyAll');
    }
    /**
     * Navigate to forward
     *
     * @return ForwardRequestBuilder
     */
    public function forward(): ForwardRequestBuilder
    {
        return new ForwardRequestBuilder($this->client, $this->requestUrl . '/forward');
    }
    /**
     * Navigate to move
     *
     * @return MoveRequestBuilder
     */
    public function move(): MoveRequestBuilder
    {
        return new MoveRequestBuilder($this->client, $this->requestUrl . '/move');
    }
    /**
     * Navigate to permanentDelete
     *
     * @return PermanentDeleteRequestBuilder
     */
    public function permanentDelete(): PermanentDeleteRequestBuilder
    {
        return new PermanentDeleteRequestBuilder($this->client, $this->requestUrl . '/permanentDelete');
    }
    /**
     * Navigate to reply
     *
     * @return ReplyRequestBuilder
     */
    public function reply(): ReplyRequestBuilder
    {
        return new ReplyRequestBuilder($this->client, $this->requestUrl . '/reply');
    }
    /**
     * Navigate to replyAll
     *
     * @return ReplyAllRequestBuilder
     */
    public function replyAll(): ReplyAllRequestBuilder
    {
        return new ReplyAllRequestBuilder($this->client, $this->requestUrl . '/replyAll');
    }
    /**
     * Navigate to send
     *
     * @return SendRequestBuilder
     */
    public function send(): SendRequestBuilder
    {
        return new SendRequestBuilder($this->client, $this->requestUrl . '/send');
    }
}
