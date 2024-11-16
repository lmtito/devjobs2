@extends('layouts.app')

@section('content')
<div class="container">
    <section data-bs-version="5.1" class="features5 cid-uu3zZsSkk6" id="features6-d">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Cards -->
                <div class="card col-12 col-lg-12">
                    <div class="card-wrapper mbr-flex">
                        <div class="card-box align-left">

                            <h5 class="card-title mbr-fonts-style align-left mb-3 display-5"><strong>Ingeniero Eléctrico</strong></h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                <b>Sector: Electricidad</b></p>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                Buscamos un ingeniero eléctrico con experiencia en diseño de sistemas de energía renovable.</p>
                            <!--div class="mbr-section-btn"><a href="#" class="btn btn-primary display-4" onclick="toggleDetails('details1')">Mas Informacion</a></div-->
                            <div id="details1" class="details">
                                <p></p>
                                <h6><b>Descripción del Puesto:</b></h6>
                                <p>Buscamos un ingeniero eléctrico altamente motivado para unirse a nuestro equipo de proyectos de energía renovable. Serás responsable del diseño, implementación y supervisión de sistemas eléctricos en instalaciones solares y eólicas.</p>
                                <h6><b>Requisitos:</b></h6>
                                <ul>
                                    <li>Mínimo 3 años de experiencia en diseño eléctrico.</li>
                                    <li>Conocimiento en software de diseño (AutoCAD, ETAP).</li>
                                    <li>Capacidad para trabajar en equipo y bajo presión.</li>
                                </ul>
                                <h6><b>Ofrecemos:</b></h6>
                                <ul>
                                    <li>Salario competitivo y beneficios adicionales.</li>
                                    <li>Oportunidades de capacitación y desarrollo profesional.</li>
                                    <li>Un ambiente de trabajo colaborativo y dinámico.</li>
                                </ul>
                                <div class="mbr-section-btn item-footer mt-2"><a href="{{ route('home.apply') }}" class="btn btn-primary item-btn display-4" target="_blank">Postularse</a></div>
                            </div>
                        </div>

                        <div class="img-wrapper img1 align-center">
                            <span class="mbr-iconfont mobi-mbri-wifi mobi-mbri"></span>
                        </div>

                    </div>
                </div>

                <p></p>

                <div class="card col-12 col-lg-12">
                    <div class="card-wrapper mbr-flex">
                        <div class="card-box align-left">

                            <h5 class="card-title mbr-fonts-style align-left mb-3 display-5"><strong>Técnico de Mantenimiento</strong></h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                <b>Sector: Mantenimiento</b></p>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                Se busca técnico en mantenimiento para realizar reparaciones en equipos y sistemas industriales.</p>
                            <!--div class="mbr-section-btn"><a href="#" class="btn btn-primary display-4" onclick="toggleDetails('details2')">Mas Informacion</a></div-->
                            <div id="details2" class="details">
                                <p></p>
                                <h6><b>Descripción del Puesto:</b></h6>
                                <p>Estamos en búsqueda de un técnico de mantenimiento proactivo para asegurar el funcionamiento óptimo de nuestras instalaciones y equipos. Este rol implica realizar mantenimientos preventivos y correctivos en maquinaria eléctrica y sistemas de energía.</p>
                                <h6><b>Requisitos:</b></h6>
                                <ul>
                                    <li>Título técnico en Mantenimiento Industrial, Electricidad o similar.</li>
                                    <li>Experiencia mínima de 2 años en mantenimiento eléctrico.</li>
                                    <li>Conocimiento de normativas de seguridad laboral.</li>
                                    <li>Habilidades para resolver problemas y atención al detalle.</li>
                                </ul>
                                <h6><b>Ofrecemos:</b></h6>
                                <ul>
                                    <li>Salario competitivo y prestaciones de ley.</li>
                                    <li>Oportunidades de crecimiento dentro de la empresa.</li>
                                    <li>Trabajo en un entorno que promueve la sostenibilidad y la innovación.</li>
                                </ul>
                                <div class="mbr-section-btn item-footer mt-2"><a href="{{ route('home.apply') }}" class="btn btn-primary item-btn display-4" target="_blank">Postularse</a></div>
                            </div>
                        </div>

                        <div class="img-wrapper img1 align-center">
                            <span class="mbr-iconfont mobi-mbri-wifi mobi-mbri"></span>
                        </div>

                    </div>
                </div>

                <p></p>

                <div class="card col-12 col-lg-12">
                    <div class="card-wrapper mbr-flex">
                        <div class="card-box align-left">

                            <h5 class="card-title mbr-fonts-style align-left mb-3 display-5"><strong>Desarrollador de Software</strong></h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                <b>Sector: Tecnología de la Información (TI)</b></p>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                Buscamos un desarrollador de software con experiencia en aplicaciones web y móviles.</p>
                            <!--div class="mbr-section-btn"><a href="#" class="btn btn-primary display-4" onclick="toggleDetails('details3')">Mas Informacion</a></div-->
                            <div id="details3" class="details">
                                <p></p>
                                <h6><b>Descripción del Puesto:</b></h6>
                                <p>El candidato ideal debe tener habilidades en programación y contribuir al desarrollo de soluciones innovadoras para nuestros clientes. Trabajará en un entorno colaborativo, enfocándose en la mejora continua de nuestros productos.</p>
                                <h6><b>Requisitos:</b></h6>
                                <ul>
                                    <li>Título en Ingeniería de Software o campo relacionado.</li>
                                    <li>Experiencia en lenguajes de programación como Java, Python o JavaScript.</li>
                                    <li>Conocimiento de bases de datos SQL y NoSQL.</li>
                                </ul>
                                <h6><b>Ofrecemos:</b></h6>
                                <ul>
                                    <li>Un ambiente de trabajo flexible.</li>
                                    <li>Oportunidades de capacitación y desarrollo profesional.</li>
                                    <li>Un paquete de beneficios que incluye seguro de salud y días libres.</li>
                                </ul>
                                <div class="mbr-section-btn item-footer mt-2"><a href="{{ route('home.apply') }}" class="btn btn-primary item-btn display-4" target="_blank">Postularse</a></div>
                            </div>
                        </div>

                        <div class="img-wrapper img1 align-center">
                            <span class="mbr-iconfont mobi-mbri-wifi mobi-mbri"></span>
                        </div>

                    </div>
                </div>

                <p></p>

                <div class="card col-12 col-lg-12">
                    <div class="card-wrapper mbr-flex">
                        <div class="card-box align-left">

                            <h5 class="card-title mbr-fonts-style align-left mb-3 display-5"><strong>Especialista en Selección de Personal</strong></h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                <b>Sector: Recursos Humanos</b></p>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                Se busca un especialista en selección de personal para gestionar procesos de contratación.</p>
                            <!--div class="mbr-section-btn"><a href="#" class="btn btn-primary display-4" onclick="toggleDetails('details4')">Mas Informacion</a></div-->
                            <div id="details4" class="details">
                                <p></p>
                                <h6><b>Descripción del Puesto:</b></h6>
                                <p>El candidato será responsable de atraer y seleccionar talento, así como de implementar estrategias de retención. Trabajará estrechamente con los gerentes de departamento para entender sus necesidades.</p>
                                <h6><b>Requisitos:</b></h6>
                                <ul>
                                    <li>Título en Psicología, Recursos Humanos o campo relacionado.</li>
                                    <li>Experiencia previa en reclutamiento y selección.</li>
                                    <li>Habilidades de comunicación y negociación.</li>
                                </ul>
                                <h6><b>Ofrecemos:</b></h6>
                                <ul>
                                    <li>Un ambiente de trabajo colaborativo.</li>
                                    <li>Oportunidades de desarrollo profesional.</li>
                                </ul>
                                <div class="mbr-section-btn item-footer mt-2"><a href="{{ route('home.apply') }}" class="btn btn-primary item-btn display-4" target="_blank">Postularse</a></div>
                            </div>
                        </div>

                        <div class="img-wrapper img1 align-center">
                            <span class="mbr-iconfont mobi-mbri-wifi mobi-mbri"></span>
                        </div>

                    </div>
                </div>

                <p></p>

                <div class="card col-12 col-lg-12">
                    <div class="card-wrapper mbr-flex">
                        <div class="card-box align-left">

                            <h5 class="card-title mbr-fonts-style align-left mb-3 display-5"><strong>Ejecutivo de Marketing Digital</strong></h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                <b>Sector: Marketing</b></p>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                Buscamos un ejecutivo de marketing digital para potenciar nuestra presencia en línea.</p>
                            <!--div class="mbr-section-btn"><a href="#" class="btn btn-primary display-4" onclick="toggleDetails('details5')">Mas Informacion</a></div-->
                            <div id="details5" class="details">
                                <p></p>
                                <h6><b>Descripción del Puesto:</b></h6>
                                <p>El candidato será responsable de diseñar y ejecutar campañas de marketing digital, incluyendo SEO, SEM y gestión de redes sociales. Colaborará con el equipo creativo para generar contenido atractivo.</p>
                                <h6><b>Requisitos:</b></h6>
                                <ul>
                                    <li>Título en Marketing, Comunicación o campo relacionado.</li>
                                    <li>Experiencia en herramientas de marketing digital y análisis de datos.</li>
                                    <li>Creatividad y habilidades de comunicación.</li>
                                </ul>
                                <h6><b>Ofrecemos:</b></h6>
                                <ul>
                                    <li>Un ambiente de trabajo dinámico.</li>
                                    <li>Formación continua.</li>
                                </ul>
                                <div class="mbr-section-btn item-footer mt-2"><a href="{{ route('home.apply') }}" class="btn btn-primary item-btn display-4" target="_blank">Postularse</a></div>
                            </div>
                        </div>

                        <div class="img-wrapper img1 align-center">
                            <span class="mbr-iconfont mobi-mbri-wifi mobi-mbri"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
