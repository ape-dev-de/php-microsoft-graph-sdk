<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares\Jobs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PrintJobStatus;

/**
 * Request builder for /print/shares/{printerShare-id}/jobs/{printJob-id}/start
 */
class StartRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action start
     * @param PrintJobStatus|\stdClass $body Request body
     * @return PrintJobStatus|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(PrintJobStatus|\stdClass $body): PrintJobStatus|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to PrintJobStatus|\stdClass|null
     */
    private function deserializePost(string $body): PrintJobStatus|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PrintJobStatus($data);
    }
}
