<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\JoinedTeams\Channels\Messages\Replies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ChatMessage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\JoinedTeams\Channels\Messages\Replies\HostedContentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\JoinedTeams\Channels\Messages\Replies\SetReactionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\JoinedTeams\Channels\Messages\Replies\SoftDeleteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\JoinedTeams\Channels\Messages\Replies\UndoSoftDeleteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\JoinedTeams\Channels\Messages\Replies\UnsetReactionRequestBuilder;

/**
 * Request builder for /users/{user-id}/joinedTeams/{team-id}/channels/{channel-id}/messages/{chatMessage-id}/replies/{chatMessage-id1}
 */
class ChatMessageRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get replies from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ChatMessage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ChatMessage
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
     * Deserialize response to ChatMessage
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
        return new ChatMessage($data);
    }
    /**
     * Update the navigation property replies in users
     * @param ChatMessage $body Request body
     * @return ChatMessage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ChatMessage $body): ChatMessage
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ChatMessage
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
        return new ChatMessage($data);
    }
    /**
     * Delete navigation property replies for users
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
}
