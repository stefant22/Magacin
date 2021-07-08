<?php

return[
#Device Routes
    App\Core\route::get('|^model/([0-9]+)/?$|','Device','show'),
    App\Core\route::get('|^device/add_device?$|','Device','getAdd'),
    App\Core\route::post('|^device/add_device?$|','Device','postAdd'),
    App\Core\route::get('|^magacin-stanje$|','Device','magacinStanje'),
    App\Core\route::get('|^zaTehnicki-stanje$|','Device','zaTehnickiStanje'),
    App\Core\route::post('|^search/?$|','Device','search'),
    App\Core\route::get('|^history/([0-9]+)/?$|','Device','deviceHistory'),
    App\Core\route::get('|^edit/([0-9]+)/?$|','Device','edit'),
    App\Core\route::post('|^edit/([0-9]+)/?$|','Device','postEdit'),

#Revers Routes
    App\Core\route::get('|^reversi$|','Revers','show'),
    App\Core\route::get('|^reversi$|','Revers','getAdd'),
    App\Core\route::get('|^revers/([0-9]+)/?$|','Revers','revers'),
    App\Core\route::post('|^reversi$|','Revers','postAdd'),
    App\Core\route::get('|^zaduzenja/([a-zA-Z ]+)$|','Revers','zad'), 


#Location Routes
    App\Core\route::get('|^ekspoziture$|','Location','ekspoziture'), 
    App\Core\route::get('|^ekspoziture/add_location?$|','Location','getAdd'),  
    App\Core\route::post('|^ekspoziture/add_location?$|','Location','postAdd'), 
    App\Core\route::get('|^ekspoziture/([a-zA-Z0-9 ]+)$|','Location','show'), 


#DeviceRevers Routes
    App\Core\route::get('|^dodaj-opremu/([0-9]+)/?$|','DeviceRevers','getAdd'),
    App\Core\route::post('|^dodaj-opremu/([0-9]+)/?$|','DeviceRevers','postAdd'),
    App\Core\route::get('|^deviceHistory$|','DeviceRevers','deviceHistory'),


#Model Routes    
    App\Core\route::get('|^model_type/([0-9]+)/?$|','Model','show'),
    App\Core\route::get('|^model/add_model?$|','Model','getAdd'),
    App\Core\route::post('|^model/add_model?$|','Model','postAdd'),

#Api Routes
App\Core\route::get('|^api/zaTehnicki-stanje?$|','ApiDevice','zaTehnickiStanje'),
App\Core\route::get('|^api/zaduzenja/([a-zA-Z ]+)$|','ApiRevers','zad'), 

    App\Core\route::get('|^.*$|','Main','home')




];