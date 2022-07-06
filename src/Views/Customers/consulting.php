<?php
include   "../Ejercicio4/src/Views/plantilla.php";
?>
<main class="mx-5 h-screen">
    <h1 class="text-center text-3xl font-bold py-5 text-white">Planes asociados a <?php echo $cliente['nombre']  ?></h1>



    <div class="table-responsive">
        <table class="border-separate table-auto w-full border border-slate-200 dark:border-slate-100 bg-white dark:bg-slate-100 text-sm shadow-sm">
            <thead class="bg-slate-50 dark:bg-slate-200">
                <tr>
                    <th class=" border border-slate-300 dark:border-blue-800 font-semibold p-4  dark:text-blue-800 text-center">Codigo</th>
                    <th class=" border border-slate-300 dark:border-blue-800 font-semibold p-4  dark:text-blue-800 text-center">Descripcion</th>
                    <th class=" border border-slate-300 dark:border-blue-800 font-semibold p-4  dark:text-blue-800 text-center">Accion planes <i class="fa-solid fa-mobile"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($planes as $plan) {
                    echo "<tr>";
                    echo "<td class='border border-slate-400 p-4 text-slate-500 dark:text-blue-700 font-semibold '>" . $plan['codigo'] . "</td>";
                    echo "<td class='border border-slate-400 p-4 text-slate-500 dark:text-blue-700 font-semibold '>" . $plan['descripcion'] . "</td>";
                    echo "<td class='border border-slate-400  text-slate-500 dark:text-red-800 cursor-pointer' >";
                    echo"<form method='post' action='" . $_ENV['HOST'] . "/delete/customer/plan". "'> <button class='bg-red-600 text-white  py-2 px-4 rounded'><i class='fa-solid fa-trash text-slate-50'>   Eliminar </i></button></td>";
                    echo " <input type='hidden' name='codPlan' value='". $plan['codigo'] .  "' >";
                    echo " <input type='hidden' name='codCliente' value='". $cliente['codigo'] .  "' ></form>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
</body>

</html>