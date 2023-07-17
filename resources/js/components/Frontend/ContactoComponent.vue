<template>
    <div class="section pt-3">
         <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>contacto</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                            <li class="breadcrumb-item active">Contacto</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="contact-page section-b-space">
        <div class="container">
            <div class="row section-b-space">
                <div class="col-lg-7 map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.939209365234!2d-99.5326274261774!3d19.28500964538049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf53b15c16933%3A0x15d7f556ff0b653!2sElectr%C3%B3nica%20y%20Control%20Industrial%20%22V%C3%A1zquez%22!5e0!3m2!1ses-419!2smx!4v1689366041321!5m2!1ses-419!2smx"
                        allowfullscreen></iframe>
                </div>
                <div class="col-lg-5">
                    
                    <div class="contact-right">
                        <ul>
                            <li>
                                <div class="contact-icon"><img src="assets/images/icon/phone.png"
                                        alt="Generic placeholder image">
                                    <h6>Contacto</h6>
                                </div>
                                <div class="media-body">
                                    <p>+52 {{this.info_contacto.num_contacto}}</p>
                                    <p>+52 {{this.info_contacto.num_contacto2}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h6>Dirección</h6>
                                </div>
                                <div class="media-body">
                                    <p>{{this.info_contacto.direccion}}</p>
                                    <!-- <p>USA 123456</p> -->
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><img src="assets/images/icon/email.png"
                                        alt="Generic placeholder image">
                                    <h6>Correo</h6>
                                </div>
                                <div class="media-body">
                                    <p>{{this.info_contacto.correo}}</p>
                                    <!-- <p>info@shopcart.com</p> -->
                                </div>
                            </li>
                            <!-- <li>
                                <div class="contact-icon"><i class="fa fa-fax" aria-hidden="true"></i>
                                    <h6>Fax</h6>
                                </div>
                                <div class="media-body">
                                    <p>Support@Shopcart.com</p>
                                    <p>info@shopcart.com</p>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div v-if="registroExitoso" class="alert alert-success">
                    ¡El registro se realizó correctamente!
                </div>
                <div class="col-sm-12">
                    <form class="theme-form" @submit.prevent="agregarMensaje()">
                        <div class="form-row row">
                            <div class="col-md-6">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre completo" v-model="mensajes.nombre"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Correo electrónico</label>
                                <input type="email" class="form-control" id="last-name" placeholder="Ingresa algún correo valido" v-model="mensajes.correo" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Número de teléfono</label>
                                <input type="text" class="form-control" id="review" placeholder="Ingresa tu número de teléfono" v-model="mensajes.numero_telefonico"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Escribe tu mensaje</label>
                                <textarea class="form-control" placeholder="Ingresa aquí tu mensaje ..." v-model="mensajes.mensaje"
                                    id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-solid" type="submit">Enviar mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
    </div>
</template>

<script>
export default {

    data() {
        return {
            info_contacto : [],
            mensajes:{
                nombre:'',
                correo:'',
                numero_telefonico:'',
                mensaje:''
            },
            registroExitoso:false
        };
    },

    mounted(){
        this.infoContacto();
    },

    methods:{
        infoContacto(){
            axios.get('contacto/informacion').then(res =>{
                this.info_contacto = res.data.info
            }); 
        },
        agregarMensaje(){
            const mensajes = this.mensajes
            axios.post('contacto/agregar-mensaje',mensajes).then(res =>{
                this.mensajes={
                                nombre:'',
                                correo:'',
                                numero_telefonico:'',
                                mensaje:''
                            }
                this.registroExitoso = true;            
            });
        }
    }
};
</script>

<style lang="scss" scoped>

</style>
