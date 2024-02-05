<?php 

return [
    'schedules' => 'Pianificazioni',
    'manage-schedules' => 'Gestisci pianificazioni',
    'create-schedule' => 'Crea pianificazione',
    'name' => 'Nome',
    'last-run-at' => 'Ultima esecuzione alle',
    'next-run-at' => 'Prossima esecuzione alle',
    'status' => 'Stato',
    'active' => 'Attivo',
    'inactive' => 'Inattivo',
    'processing' => 'In elaborazione',
    'manage-schedule' => 'Gestisci pianificazione',
    'new-task' => 'Nuovo compito',
    'run-now' => 'Esegui ora',
    'editBtn' => 'Modifica',
    'n/a' => 'n/d',
    'never' => 'mai',

    'no-schedules' => 'Non ci sono pianificazioni configurate per questo server.',
    'ignore-files-folders' => 'Ignora file e cartelle',
    'continues-on-failure' => 'Continua in caso di fallimento',
    'later' => 'più tardi',

    'minute' => 'Minuto',
    'hour' => 'Ora',
    'day' => 'Giorno',
    'week' => 'Settimana',
    'day-of-month' => 'Giorno del mese',
    'month' => 'Mese',
    'day-of-week' => 'Giorno della settimana',

    'deleteTask' => [
        'title' => 'Conferma eliminazione compito',
        'description' => 'Sei sicuro di voler eliminare questo compito? Questa azione non può essere annullata.',
        'delete' => 'Elimina Compito'
    ],
    'delete' => [
        'title' => 'Elimina Pianificazione',
        'description' => 'Tutti i compiti verranno rimossi e eventuali processi in esecuzione saranno terminati.',
        'delete' => 'Elimina'
    ],
    'edit' => [
        'title-1' => 'Modifica pianificazione',
        'title-2' => 'Crea nuova pianificazione',

        'description' => 'Il sistema di pianificazione supporta l\'uso della sintassi Cronjob per definire quando i compiti dovrebbero iniziare a eseguirsi. Utilizza i campi sopra per specificare quando questi compiti dovrebbero iniziare a eseguirsi.',
        
        'name' => 'Nome della pianificazione',
        'name-description' => 'Un identificativo leggibile per questa pianificazione.',
        'cheatsheet' => 'Mostra Foglio d\'inganno',
        'cheatsheet-description' => 'Mostra il foglio d\'inganno di cron per alcuni esempi',
        'online-when-online' => 'Solo quando il server è online',
        'online-when-online-description' => 'Esegui questa pianificazione solo quando il server è in uno stato di esecuzione.',
        'enabled' => 'Pianificazione abilitata',
        'enabled-description' => 'Questa pianificazione verrà eseguita automaticamente se abilitata.',

        'save-changes' => 'Salva modifiche',
    ],
    'cheatsheet' => [
        'example' => 'Esempi',
        'every-5-minutes' => 'ogni 5 minuti',
        'every-hour' => 'ogni ora',
        'hour-range' => 'intervallo d\'ora',
        'once-a-day' => 'una volta al giorno',
        'every-monday' => 'ogni lunedì',
        'special-characters' => 'Caratteri speciali',
        'any-value' => 'qualsiasi valore',
        'value-list-separator' => 'separatore di lista di valori',
        'range-values' => 'valori di intervallo',
        'step-values' => 'valori di passo',
    ],
    'task' => [
        'message' => 'Non è possibile creare un compito di backup quando il limite di backup del server è impostato su 0.',
        'edit-task' => 'Modifica Compito',
        'save-changes' => 'Salva Modifiche',
        'create-task' => 'Crea Compito',
        'action' => 'Azione',
        'send-command' => 'Invia comando',
        'send-power-action' => 'Invia azione di alimentazione',
        'create-backup' => 'Crea backup',
        'offset' => 'Offset temporale (in secondi)',
        'offset-description' => 'La quantità di tempo da attendere dopo che il compito precedente si è eseguito prima di eseguire questo. Se questo è il primo compito su una pianificazione, ciò non verrà applicato.',
        'payload' => 'Carico',
        'ignored-files' => 'File Ignorati',
        'ignored-files-description' => 'Opzionale. Includi i file e le cartelle da escludere in questo backup. Per impostazione predefinita, verranno utilizzati i contenuti del tuo file .pteroignore. Se hai raggiunto il limite di backup, il backup più vecchio verrà ruotato.',
        'start-server' => 'Avvia il server',
        'stop-server' => 'Arresta il server',
        'restart-server' => 'Riavvia il server',
        'kill-server' => 'Termina il server',
        'continue-on-failure' => 'Continua in caso di fallimento',
        'continue-on-failure-description' => 'I compiti futuri verranno eseguiti quando questo compito fallisce.',
    ],
];
