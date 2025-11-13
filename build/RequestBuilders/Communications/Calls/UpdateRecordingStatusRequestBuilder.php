<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UpdateRecordingStatusOperation;

/**
 * Request builder for /communications/calls/{call-id}/updateRecordingStatus
 */
class UpdateRecordingStatusRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action updateRecordingStatus
     * @param UpdateRecordingStatusOperation|\stdClass $body Request body
     * @return UpdateRecordingStatusOperation|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(UpdateRecordingStatusOperation|\stdClass $body): UpdateRecordingStatusOperation|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to UpdateRecordingStatusOperation|\stdClass|null
     */
    private function deserializePost(string $body): UpdateRecordingStatusOperation|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new UpdateRecordingStatusOperation($data);
    }
}
