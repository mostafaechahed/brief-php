<?php
function capital($capital){
   
    switch ($capital) {
        case 'France':
            echo "Paris";
            break;

            case 'Allemagne':
                echo "Berlin";
                break;

                case 'Italie':
                    echo "Rome";
                    break;

                    case 'Maroc':
                        echo "Rabat";
                        break;

                        case 'Espagne':
                            echo "Madrid";
                            break;

                            case 'Portugal':
                                echo "Lisbonne";
                                break;
        
        default:
            echo "inconnu";
            break;
    }
}
capital("Maroc");