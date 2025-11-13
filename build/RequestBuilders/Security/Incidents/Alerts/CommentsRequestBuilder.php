<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Incidents\Alerts;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Incidents\Alerts\Comments\CountRequestBuilder;

/**
 * Request builder for /security/incidents/{incident-id}/alerts/{alert-id}/comments
 */
class CommentsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Sets a new value for the collection of alertComment.
     *
     * @param string|null $ifMatch ETag
     * @param array<string, mixed> $body Request body
     * @return array<string, mixed>|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(?string $ifMatch = null, array $body): array|null
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->post($this->requestUrl, $body);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to array|null
     */
    private function deserializePost(string $body): array|null    {
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
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
}
