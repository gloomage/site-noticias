<template>
  <q-page style="padding: 3rem 8rem;">
    <div class="row" style="height: 500px;">
      <div class="col-12">
        <q-list>
          <template v-for="(item, index) in noticias" :key="index">
            <q-item class="q-my-md" style="min-width: 600px;">
              <q-item-section class="q-ml-none" style="max-width: 307px; min-width: 307px;">
                <q-img 
                  :ratio="16/9" style="border-radius: .75em;" 
                  :src="item.img_principal"
                />
              </q-item-section >

              <q-item-section style="justify-content: start; margin-left: 20px;">
                <q-item-label class="noticia-tag" >{{ item.tag }}</q-item-label>
                <q-item-label class="noticia-title q-my-sm" > {{ item.title }}</q-item-label>
                <q-item-label class="noticia-subtitle" >{{ item.subtitle }}</q-item-label>
                <q-item-label class="noticia-publicado" >{{ item.publicado }}</q-item-label>
              </q-item-section>

              <q-item-section side top>
                <q-btn 
                  icon="more_vert" round flat
                >
                  <q-menu style="min-width: 100px;">
                    <q-list>
                      <q-item clickable v-close-popup>
                        <q-item-section>Editar</q-item-section>
                      </q-item>
                      <q-item clickable v-close-popup>
                        <q-item-section>Excluir</q-item-section>
                      </q-item>
                    </q-list>
                  </q-menu>
                </q-btn>
              </q-item-section>
            </q-item>
            <q-separator inset />
          </template>
          
        </q-list>
      </div>
    </div>
    
  </q-page>
</template>

<script>
import { defineComponent } from 'vue';
import axios from "axios";

export default defineComponent({
  name: 'IndexPage',
  data() {
    return {
      noticias: []
    }
  },
  created() {
    this.buscarDados();
  },
  methods: {
    buscarDados() {
      axios
        .get("http://127.0.0.1/site-noticias/api/public/api/noticias")
        .then((res) => {
          this.noticias = res.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  }
  
})
</script>

<style lang="scss">
.q-item__label {
  margin: none;
}
.noticia-tag {
  font-size: 16px;
  font-weight: 600;
}
.noticia-title {
  font-size: 24px;
  font-weight: 700;
  color: red;
}
.noticia-subtitle {
  font-size: 16px;
  color: rgb(151, 151, 151);
}
.noticia-publicado {
  margin-top: auto;
  color: rgb(151, 151, 151);
}
</style>