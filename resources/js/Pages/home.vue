<script lang="ts" setup>
   const AssetImage = (filename:string) => `/images/${filename}`;
 </script>

<template>
    <div>

        <div class="otilo-center-container">
            <div>
                <img :src="AssetImage('Otilo_nobackground.png')"/>
            </div>

            <div>
                <span class="fs-1">Coming Soon.</span>
            </div>

            <div class="otilo-absolute-right">
                <img :src="AssetImage('curvyicons.png')"/>
            </div>
        </div>
    
    </div>
</template>