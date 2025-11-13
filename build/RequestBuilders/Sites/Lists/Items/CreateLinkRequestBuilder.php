<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Lists\Items;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Permission;

/**
 * Request builder for /sites/{site-id}/lists/{list-id}/items/{listItem-id}/createLink
 */
class CreateLinkRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action createLink
     * @param Permission|\stdClass $body Request body
     * @return Permission|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(Permission|\stdClass $body): Permission|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to Permission|\stdClass|null
     */
    private function deserializePost(string $body): Permission|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Permission($data);
    }
}
