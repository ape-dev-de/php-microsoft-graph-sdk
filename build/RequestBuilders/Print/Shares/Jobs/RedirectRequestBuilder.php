<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Print\Shares\Jobs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PrintJob;

/**
 * Request builder for /print/shares/{printerShare-id}/jobs/{printJob-id}/redirect
 */
class RedirectRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action redirect
     * @param PrintJob|\stdClass $body Request body
     * @return PrintJob|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(PrintJob|\stdClass $body): PrintJob|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to PrintJob|\stdClass|null
     */
    private function deserializePost(string $body): PrintJob|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PrintJob($data);
    }
}
