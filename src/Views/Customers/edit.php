<?php
include   "../Ejercicio4/src/Views/plantilla.php";
?>
<div class="pb-5 w-full h-full">
     <br>
    <p class="text-center text-2xl pt-6 font-bold text-slate-100 " >Seleccione un plan a añadir</p>

    <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" class="bg-slate-300 w-1/2 mx-auto p-5 rounded-lg mb-5">
        <div class="w-full">
            <input type="hidden" name="codigo" value="<?php echo $customers['codigo'] ?>">
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-slate-600">Nombre Completo</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="nombre" value="<?php echo $customers['nombre'] ?>" disabled>
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-slate-600">DUI</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="dui" value="<?php echo $customers['dui'] ?>" disabled>
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-slate-600">Direccion domiciliar</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="direccion" value="<?php echo $customers['direccion'] ?>" disabled>
            </div>

            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-slate-600">Planes disponibles</label>
                <select class="border py-2 px-3 text-grey-darkest" name="codPlan">
                    <?php foreach ($plans as $plan) { ?>
                        <option value="<?php echo $plan['codigo'] ?>"><?php echo $plan['descripcion'] ?></option>
                    <?php } ?>
                </select>


            <br>
            <input class="block bg-blue-700 text-slate-50 uppercase text-lg mx-auto p-4 rounded font-bold" type="submit" value="Añadir plan">
        </div>
    </form>
</div>
</body>

</html>