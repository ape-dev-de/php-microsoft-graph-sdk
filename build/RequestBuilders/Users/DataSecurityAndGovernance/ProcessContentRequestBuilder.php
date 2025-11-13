<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\DataSecurityAndGovernance;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ProcessContentResponse;

/**
 * Request builder for /users/{user-id}/dataSecurityAndGovernance/processContent
 */
class ProcessContentRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action processContent
     * @param ProcessContentResponse|\stdClass $body Request body
     * @return ProcessContentResponse|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ProcessContentResponse|\stdClass $body): ProcessContentResponse|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ProcessContentResponse|\stdClass|null
     */
    private function deserializePost(string $body): ProcessContentResponse|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ProcessContentResponse($data);
    }
}
