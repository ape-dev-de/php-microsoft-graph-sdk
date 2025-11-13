<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\OnlineMeetings\Transcripts;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;

/**
 * Request builder for /users/{user-id}/onlineMeetings/{onlineMeeting-id}/transcripts/{callTranscript-id}/metadataContent
 */
class MetadataContentRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get callTranscript
     * @return string|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): string|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to string|null
     */
    private function deserializeGet(string $body): string|null    {
        if (empty($body)) {
            return null;
        }

        return $body;
    }
    /**
     * Update metadataContent for the navigation property transcripts in users
     * @param array<string, mixed> $body Request body
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function put(array $body): mixed
    {
        $response = $this->client->put($this->requestUrl, $body);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePut($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializePut(string $body): mixed    {
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
     * Delete metadataContent for the navigation property transcripts in users
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
}
