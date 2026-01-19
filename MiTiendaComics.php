<?php
// Definición del inventario de cómics
$inventario = [
    'suspense_terror' => [
        [
            'titulo' => 'The Long Halloween',
            'editorial' => 'DC',
            'autor' => 'Tim Sale',
            'idioma' => 'Inglés',
            'precio' => 20,
            'stock' => 10
        ],
        [
            'titulo' => 'Uzumaki',
            'editorial' => 'Planeta',
            'autor' => 'Junji Ito',
            'idioma' => 'Japonés',
            'precio' => 25,
            'stock' => 15
        ],
        [
            'titulo' => 'Tomie',
            'editorial' => 'Planeta',
            'autor' => 'Junji Ito',
            'idioma' => 'Japonés',
            'precio' => 25,
            'stock' => 20
        ],
    ],
    'accion' => [
        [
            'titulo' => 'Berserk Deluxe Edition 1',
            'editorial' => 'Dark Horse',
            'autor' => 'Kentaro Miura',
            'idioma' => 'Japonés',
            'precio' => 30,
            'stock' => 12
        ],
    ],
];

// ======================
// MAIN
// ======================
echo "<h3>Inventario original</h3>";
mostrarComicsEnTabla();
mostrarValorAlmacen();

aplicarDescuentoManga();

echo "<h3>Inventario con descuento manga</h3>";
mostrarComicsEnTabla();
mostrarValorAlmacen();

// ======================
// FUNCIONES
// ======================

function mostrarComicsEnTabla()
{
    global $inventario;

    echo '<table border="1" cellpadding="5" cellspacing="0">';
    echo '<tr>
            <th>Categoría</th>
            <th>Título</th>
            <th>Editorial</th>
            <th>Autor</th>
            <th>Idioma</th>
            <th>Precio</th>
            <th>Stock</th>
          </tr>';

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            echo '<tr>';
            echo "<td>$categoria</td>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo '</tr>';
        }
    }

    echo '</table><br>';
}

function mostrarValorAlmacen()
{
    global $inventario;
    $total = 0;

    foreach ($inventario as $comics) {
        foreach ($comics as $comic) {
            $total += $comic['precio'] * $comic['stock'];
        }
    }

    echo "<strong>Total valor almacén:</strong> $total<br><br>";
}

function aplicarDescuentoManga()
{
    global $inventario;

    foreach ($inventario as &$categoria) {
        foreach ($categoria as &$comic) {
            if ($comic['idioma'] === 'Japonés') {
                $comic['precio'] *= 0.7; // 30% de descuento
            }
        }
    }
}
?>
