<?php
include   "../Ejercicio4/src/Views/plantilla.php";
?>
<main class="mx-5 h-screen">
    <h1 class="text-center text-3xl font-bold py-5 text-white">Administrador de planes</h1>

    <a class="absolute w-14 h-14 bottom-10 right-10 bg-sky-800 text-white rounded-full text-center shadow cursor-pointer" onclick="openFormAgregar()">
        <i class="fa fa-plus text-5xl font-bold"></i>
    </a>



    <div class="hidden fixed bottom-0 right-4 border-2 border-white z-50 text-2 rounded-lg" id="formAgregar" style="font-size:0.75em;">
        <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST" class="max-w-xs p-3 bg-white ">
            <label for="nombre"><b>Descripcion del Plan</b></label>
            <input class="w-full p-4 mx-0 mt-1 mb-6 border-0 bg-slate-200" type="text" placeholder="Ingresar descripcion del plan" name="descripcion" required>

            <button type="submit" class="btn bg-emerald-600 hover:bg-emerald-700">Agregar</button>
            <button type="button" class="btn bg-red-600 hover:bg-red-800" onclick="closeFormAgregar()">Cerrar</button>
        </form>
    </div>


    <div class="table-responsive">
        <table class="border-separate table-auto w-full border border-slate-200 dark:border-slate-100 bg-white dark:bg-slate-100 text-sm shadow-sm">
            <thead class="bg-slate-50 dark:bg-slate-200">
                <tr>
                    <th class=" border border-slate-300 dark:border-blue-800 font-semibold p-4  dark:text-blue-800 text-center">Codigo</th>
                    <th class=" border border-slate-300 dark:border-blue-800 font-semibold p-4  dark:text-blue-800 text-center">Descripcion</th>
                    <th class=" border border-slate-300 dark:border-blue-800 font-semibold p-4  dark:text-blue-800 text-center">Eliminar</th>
                    <th class=" border border-slate-300 dark:border-blue-800 font-semibold p-4  dark:text-blue-800 text-center">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($plans as $plan) {
                    echo "<tr>";
                    echo "<td class='border border-slate-400 p-4 text-slate-500 dark:text-blue-700 font-semibold '>" . $plan['codigo'] . "</td>";
                    echo "<td class='border border-slate-400 p-4 text-slate-500 dark:text-blue-700 font-semibold '>" . $plan['descripcion'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-red-800 cursor-pointer font-bold' ><a href='" . $_ENV['HOST'] . "/delete/plan?id=" . $plan['codigo'] . "'> <i class='fa-solid fa-trash text-red-600'></i>  Eliminar  </a></td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-green-600 cursor-pointer font-bold' ><a href='" . $_ENV['HOST'] . "/edit/plan?id=" . $plan['codigo'] . "'> <i class='fa-solid fa-pen-to-square text-green-600'></i>  Editar </a></td>";
                    
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
</body>

</html>