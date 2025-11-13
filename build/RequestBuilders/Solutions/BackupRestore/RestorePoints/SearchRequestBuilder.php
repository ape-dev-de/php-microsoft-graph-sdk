<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\RestorePoints;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\RestorePointSearchResponse;

/**
 * Request builder for /solutions/backupRestore/restorePoints/search
 */
class SearchRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action search
     * @param RestorePointSearchResponse|\stdClass $body Request body
     * @return RestorePointSearchResponse|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(RestorePointSearchResponse|\stdClass $body): RestorePointSearchResponse|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to RestorePointSearchResponse|\stdClass|null
     */
    private function deserializePost(string $body): RestorePointSearchResponse|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new RestorePointSearchResponse($data);
    }
}
