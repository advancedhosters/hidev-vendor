<?php

$header = <<<EOF
AdvancedHosters vendor configuration for HiDev

@link      https://github.com/advancedhosters/hidev-config
@package   hidev-config
@license   No license
@copyright Copyright (c) 2015-2016, AdvancedHosters (https://advancedhosters.com/)
EOF;

Symfony\CS\Fixer\Contrib\HeaderCommentFixer::setHeader($header);

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers([
        'header_comment',                        /// Add, replace or remove header comment.
    ])
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in(__DIR__)
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
    )
;
