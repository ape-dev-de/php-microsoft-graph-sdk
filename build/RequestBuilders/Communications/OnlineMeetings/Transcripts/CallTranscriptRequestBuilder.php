<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\OnlineMeetings\Transcripts;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CallTranscript;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\OnlineMeetings\Transcripts\ContentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\OnlineMeetings\Transcripts\MetadataContentRequestBuilder;

/**
 * Request builder for /communications/onlineMeetings/{onlineMeeting-id}/transcripts/{callTranscript-id}
 */
class CallTranscriptRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get transcripts from communications
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return CallTranscript|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): CallTranscript|null
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
     * Deserialize response to CallTranscript|null
     */
    private function deserializeGet(string $body): CallTranscript|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CallTranscript($data);
    }
    /**
     * Update the navigation property transcripts in communications
     * @param CallTranscript $body Request body
     * @return CallTranscript|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(CallTranscript $body): CallTranscript|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to CallTranscript|null
     */
    private function deserializePatch(string $body): CallTranscript|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CallTranscript($data);
    }
    /**
     * Delete navigation property transcripts for communications
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
     * Navigate to content
     *
     * @return ContentRequestBuilder
     */
    public function content(): ContentRequestBuilder
    {
        return new ContentRequestBuilder($this->client, $this->requestUrl . '/content');
    }
    /**
     * Navigate to metadataContent
     *
     * @return MetadataContentRequestBuilder
     */
    public function metadataContent(): MetadataContentRequestBuilder
    {
        return new MetadataContentRequestBuilder($this->client, $this->requestUrl . '/metadataContent');
    }
}
