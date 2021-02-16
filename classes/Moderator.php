<?php 

    include_once __DIR__ . '/User.php';  

    class Moderator extends User{

        public $gestisce_ruoli_e_impostazioni;
        public $modifica_pagina_e_agginge_app;
        public $crea_elimina_post;
        public $invia_messaggi_a_nome_pagina;

        public function __construct(string $name, string $lastname, string $nickname, int $age, string $gender, bool $gestisce_ruoli_e_impostazioni, bool $modifica_pagina_e_agginge_app, bool $crea_elimina_post, bool $invia_messaggi_a_nome_pagina){
            parent::__construct($name, $lastname, $nickname, $age, $gender);
            $this->gestisce_ruoli_e_impostazioni = $gestisce_ruoli_e_impostazioni;
            $this->modifica_pagina_e_agginge_app = $modifica_pagina_e_agginge_app;
            $this->crea_elimina_post = $crea_elimina_post;
            $this->invia_messaggi_a_nome_pagina = $invia_messaggi_a_nome_pagina;

        }
    }
    
?>