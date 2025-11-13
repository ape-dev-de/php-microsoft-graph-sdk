<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Modules;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationModule;

/**
 * Request builder for /education/classes/{educationClass-id}/modules/{educationModule-id}/pin
 */
class PinRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action pin
     * @param EducationModule|\stdClass $body Request body
     * @return EducationModule|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(EducationModule|\stdClass $body): EducationModule|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to EducationModule|\stdClass|null
     */
    private function deserializePost(string $body): EducationModule|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EducationModule($data);
    }
}
