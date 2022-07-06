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
                    <th class=" border border-slate-300 dark:border-blue-800 font-semibold p-4  dark:text-blue-800 text-center">Accion planes <i class="fa-solid fa-mobile"></i>    </th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($planes as $plan) {
                    echo "<tr>";
                    echo "<td class='border border-slate-400 p-4 text-slate-500 dark:text-blue-700 font-semibold '>" . $plan['codigo'] . "</td>";
                    echo "<td class='border border-slate-400 p-4 text-slate-500 dark:text-blue-700 font-semibold '>" . $plan['descripcion'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 text-blue-800 cursor-pointer font-bold' ><a href='" . $_ENV['HOST'] . "/plans/customer?id=" . $plan['codigo'] . "'> <i class='fa-solid fa-trash text-red-600'></i>  Eliminar plan</a></td>";
                    
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
</body>

</html>