<?php

namespace Drupal\hello_world\Controller;

class HelloController
{

    public function content(): array
    {

        return [
            '#type' => 'markup',
            '#markup' => t('Hello Drupal World!'),
        ];
    }
}
