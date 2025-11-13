<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Team\Channels\Messages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ChatMessage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Team\Channels\Messages\HostedContentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Team\Channels\Messages\SetReactionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Team\Channels\Messages\SoftDeleteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Team\Channels\Messages\UndoSoftDeleteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Team\Channels\Messages\UnsetReactionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Team\Channels\Messages\RepliesRequestBuilder;

/**
 * Request builder for /groups/{group-id}/team/channels/{channel-id}/messages/{chatMessage-id}
 */
class ChatMessageRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get messages from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ChatMessage|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ChatMessage|null
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
     * Deserialize response to ChatMessage|null
     */
    private function deserializeGet(string $body): ChatMessage|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ChatMessage($data);
    }
    /**
     * Update the navigation property messages in groups
     * @param ChatMessage $body Request body
     * @return ChatMessage|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ChatMessage $body): ChatMessage|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ChatMessage|null
     */
    private function deserializePatch(string $body): ChatMessage|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ChatMessage($data);
    }
    /**
     * Delete navigation property messages for groups
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
     * Navigate to hostedContents
     *
     * @return HostedContentsRequestBuilder
     */
    public function hostedContents(): HostedContentsRequestBuilder
    {
        return new HostedContentsRequestBuilder($this->client, $this->requestUrl . '/hostedContents');
    }
    /**
     * Navigate to setReaction
     *
     * @return SetReactionRequestBuilder
     */
    public function setReaction(): SetReactionRequestBuilder
    {
        return new SetReactionRequestBuilder($this->client, $this->requestUrl . '/setReaction');
    }
    /**
     * Navigate to softDelete
     *
     * @return SoftDeleteRequestBuilder
     */
    public function softDelete(): SoftDeleteRequestBuilder
    {
        return new SoftDeleteRequestBuilder($this->client, $this->requestUrl . '/softDelete');
    }
    /**
     * Navigate to undoSoftDelete
     *
     * @return UndoSoftDeleteRequestBuilder
     */
    public function undoSoftDelete(): UndoSoftDeleteRequestBuilder
    {
        return new UndoSoftDeleteRequestBuilder($this->client, $this->requestUrl . '/undoSoftDelete');
    }
    /**
     * Navigate to unsetReaction
     *
     * @return UnsetReactionRequestBuilder
     */
    public function unsetReaction(): UnsetReactionRequestBuilder
    {
        return new UnsetReactionRequestBuilder($this->client, $this->requestUrl . '/unsetReaction');
    }
    /**
     * Navigate to replies
     *
     * @return RepliesRequestBuilder
     */
    public function replies(): RepliesRequestBuilder
    {
        return new RepliesRequestBuilder($this->client, $this->requestUrl . '/replies');
    }
}
