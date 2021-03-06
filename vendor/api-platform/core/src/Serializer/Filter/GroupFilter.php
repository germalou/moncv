<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Serializer\Filter;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

/**
 * Group filter.
 *
 * @author Baptiste Meyer <baptiste.meyer@gmail.com>
 */
final class GroupFilter implements FilterInterface
{
    private $overrideDefaultGroups;
    private $parameterName;
    private $whitelist;

    public function __construct(string $parameterName = 'groups', bool $overrideDefaultGroups = false, array $whitelist = null)
    {
        $this->overrideDefaultGroups = $overrideDefaultGroups;
        $this->parameterName = $parameterName;
        $this->whitelist = $whitelist;
    }

    /**
     * {@inheritdoc}
     */
    public function apply(Request $request, bool $normalization, array $attributes, array &$context)
    {
        if (!\is_array($groups = $request->query->get($this->parameterName))) {
            return;
        }
        if (null !== $this->whitelist) {
            $groups = array_intersect($this->whitelist, $groups);
        }
        if (!$this->overrideDefaultGroups && isset($context[AbstractNormalizer::GROUPS])) {
            $groups = array_merge((array) $context[AbstractNormalizer::GROUPS], $groups);
        }

        $context[AbstractNormalizer::GROUPS] = $groups;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription(string $resourceClass): array
    {
        return [
            $this->parameterName.'[]' => [
                'property' => null,
                'type' => 'string',
                'required' => false,
            ],
        ];
    }
}
