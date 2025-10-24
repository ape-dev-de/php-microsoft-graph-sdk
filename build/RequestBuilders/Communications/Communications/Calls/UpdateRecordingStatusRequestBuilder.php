<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Communications\Calls;

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
     * @return UpdateRecordingStatusOperation|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(UpdateRecordingStatusOperation|\stdClass $body): UpdateRecordingStatusOperation|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to UpdateRecordingStatusOperation|\stdClass
     */
    private function deserializePost(string $body): mixed
    {
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
