<?= "<?php\n" ?>

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
<?php foreach ($imports as $import): ?>
use ApeDevDe\MicrosoftGraphSdk\Models\<?= $import ?>;
<?php endforeach; ?>
<?php foreach ($childBuilderImports as $import): ?>
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\<?= $import ?>;
<?php endforeach; ?>

/**
 * Request builder for <?= $path ?>

 */
class <?= $className ?> extends BaseRequestBuilder
{
<?= $methods ?>
}
