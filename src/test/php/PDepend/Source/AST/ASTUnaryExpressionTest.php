<?php
/**
 * This file is part of PDepend.
 *
 * PHP Version 5
 *
 * Copyright (c) 2008-2013, Manuel Pichler <mapi@pdepend.org>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Manuel Pichler nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @copyright 2008-2013 Manuel Pichler. All rights reserved.
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 */

namespace PDepend\Source\AST;

/**
 * Test case for the {@link \PDepend\Source\AST\ASTUnaryExpression} class.
 *
 * @copyright 2008-2013 Manuel Pichler. All rights reserved.
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 *
 * @covers \PDepend\Source\Language\PHP\AbstractPHPParser
 * @covers \PDepend\Source\AST\ASTUnaryExpression
 * @group unittest
 */
class ASTUnaryExpressionTest extends \PDepend\Source\AST\ASTNodeTest
{
    /**
     * testUnaryExpression
     *
     * @return \PDepend\Source\AST\ASTUnaryExpression
     * @since 1.0.2
     */
    public function testUnaryExpression()
    {
        $expr = $this->_getFirstUnaryExpressionInFunction();
        $this->assertInstanceOf(\PDepend\Source\AST\ASTUnaryExpression::CLAZZ, $expr);

        return $expr;
    }

    /**
     * testUnaryExpressionHasExpectedStartLine
     *
     * @param \PDepend\Source\AST\ASTUnaryExpression $expr
     *
     * @return void
     * @depends testUnaryExpression
     */
    public function testUnaryExpressionHasExpectedStartLine($expr)
    {
        $this->assertEquals(4, $expr->getStartLine());
    }

    /**
     * testUnaryExpressionHasExpectedStartColumn
     *
     * @param \PDepend\Source\AST\ASTUnaryExpression $expr
     *
     * @return void
     * @depends testUnaryExpression
     */
    public function testUnaryExpressionHasExpectedStartColumn($expr)
    {
        $this->assertEquals(22, $expr->getStartColumn());
    }

    /**
     * testUnaryExpressionHasExpectedEndLine
     *
     * @param \PDepend\Source\AST\ASTUnaryExpression $expr
     *
     * @return void
     * @depends testUnaryExpression
     */
    public function testUnaryExpressionHasExpectedEndLine($expr)
    {
        $this->assertEquals(5, $expr->getEndLine());
    }

    /**
     * testUnaryExpressionHasExpectedEndColumn
     *
     * @param \PDepend\Source\AST\ASTUnaryExpression $expr
     *
     * @return void
     * @depends testUnaryExpression
     */
    public function testUnaryExpressionHasExpectedEndColumn($expr)
    {
        $this->assertEquals(14, $expr->getEndColumn());
    }

    /**
     * Returns a node instance for the currently executed test case.
     *
     * @return \PDepend\Source\AST\ASTUnaryExpression
     */
    private function _getFirstUnaryExpressionInFunction()
    {
        return $this->getFirstNodeOfTypeInFunction(
            $this->getCallingTestMethod(),
            \PDepend\Source\AST\ASTUnaryExpression::CLAZZ
        );
    }
}
