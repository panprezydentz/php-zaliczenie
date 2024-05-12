<?php

declare(strict_types=1);

namespace App;

class View
{
    public function render(?string $page, array $params = []): void 
    {
        $params = $this->escape($params);
        require_once('./templates/layout.php');
    }
    private function escape (array $parrams): array 
    {
        $clearParams = [];

        foreach ($params as $key => $param) {
            if (is_array($parram)) {
                $clearParams[$key] = $this->escape($param);
            } else if ($param) {
                $clearParams[$key] = htmlentities($param);
            } else {
                $clearParams[$key] = $param;
            }
        }
        return $clearParams;
    }
}
