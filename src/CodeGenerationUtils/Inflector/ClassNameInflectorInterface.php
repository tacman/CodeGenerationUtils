<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

declare(strict_types=1);

namespace CodeGenerationUtils\Inflector;

/**
 * Interface for a generated- to user- class and user- to generated- class name inflector
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface ClassNameInflectorInterface
{
    /**
     * Marker for generated classes - classes containing this marker are considered as being generated code
     */
    const GENERATED_CLASS_MARKER = '__PM__';

    /**
     * Retrieve the class name of a user-defined FQCN
     *
     * @param string $className
     *
     * @return string
     */
    public function getUserClassName($className);

    /**
     * Retrieve the FQCN of the generated class for the given user-defined class name
     *
     * @param string $className
     * @param array  $options   arbitrary options to be used for the generated class name
     *
     * @return mixed
     */
    public function getGeneratedClassName($className, array $options = array());

    /**
     * Retrieve whether the provided class name is a generated class
     *
     * @param string $className
     *
     * @return bool
     */
    public function isGeneratedClassName($className);
}
