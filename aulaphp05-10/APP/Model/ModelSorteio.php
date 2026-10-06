<?php
    namespace APP\Model;
    class Sorteio {
        public function sortear(): int {
            return rand(1, 10);
        }
    }
?>