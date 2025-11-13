<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Chats\Messages\Replies\HostedContents;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ChatMessageHostedContent;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Chats\Messages\Replies\HostedContents\ValueRequestBuilder;

/**
 * Request builder for /chats/{chat-id}/messages/{chatMessage-id}/replies/{chatMessage-id1}/hostedContents/{chatMessageHostedContent-id}
 */
class ChatMessageHostedContentRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get hostedContents from chats
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ChatMessageHostedContent|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ChatMessageHostedContent|null
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
     * Deserialize response to ChatMessageHostedContent|null
     */
    private function deserializeGet(string $body): ChatMessageHostedContent|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ChatMessageHostedContent($data);
    }
    /**
     * Update the navigation property hostedContents in chats
     * @param ChatMessageHostedContent $body Request body
     * @return ChatMessageHostedContent|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ChatMessageHostedContent $body): ChatMessageHostedContent|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ChatMessageHostedContent|null
     */
    private function deserializePatch(string $body): ChatMessageHostedContent|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ChatMessageHostedContent($data);
    }
    /**
     * Delete navigation property hostedContents for chats
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
     * Navigate to $value
     *
     * @return ValueRequestBuilder
     */
    public function value(): ValueRequestBuilder
    {
        return new ValueRequestBuilder($this->client, $this->requestUrl . '/$value');
    }
}
